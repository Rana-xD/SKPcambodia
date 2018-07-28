<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use DB;
class OrderController extends Controller
{
    /**
    * Update page order.
    * @param  Request $request
    * @return [JSON]
    */
   //  public function updateOrder(Request $request){
   //    $test = $request->teamData;
   //    foreach($test as $i => $item) {
   //       $model = Team::find($test[$i]['id']);
   //       $model->order_id = $test[$i]['order_id'];
   //       $model->save();
   //     }
   //
   //   return ("Succcessfully updated");
   // }
   public function updateOrder(Request $request) {

      $teams = $request->teamData;
      // foreach($test as $i => $item) {
      //    $model = Team::find($test[$i]['id']);
      //    $model->order_id = $test[$i]['order_id'];
      //    $model->save();
      //  }
      //
      // $pages_order = $request;
      // $this->authorize('create', token_name($token)::class);

      $table = Team::getModel()->getTable();

      $ids = [];
      $order_cases = [];
      $params = [];

      foreach($teams as $i => $value) {
         $id = $teams[$i]['id'];
         // $orer_id = $teams[$i]['order_id'];
         $order_cases[] = "WHEN `id`='{$id}' then ?";
         $params[] = (int) $teams[$i]['order_id'];
         $ids[] = "'{$id}'";
      }
      //
      // foreach($pages_order as $uuid => $value) {
      //    $parent_id = $value['parent_id'];
      //    $params[] = ($parent_id) ? "$parent_id" : NULL;
      // }
      // dd($params);
      $ids = implode(',', $ids);
      $order_cases = implode(' ', $order_cases);

      DB::beginTransaction();
      try {
         $query = DB::update("UPDATE {$table} SET order_id = CASE {$order_cases} ELSE order_id END WHERE id in ({$ids})", $params);
      } catch (Exception $e) {
         DB::rollback();
         $status = [
            'code' => 505,
            'message' => $e->getMessage(),
         ];

         return $request->expectsJson() ? response()->json([
            'status' => $status
         ]) : redirect()->back()->with('status', $status);
      }
      DB::commit();
      $status = [
         'code' => 200,
         'message' => "Team Order updated",
      ];
      return $request->expectsJson() ? response()->json([
         'query' => $query,
         'status' => $status
      ]) : redirect()->back()->with('status', $status);
   }
}
