<?php

namespace App\Http\Controllers\Api\Feedback;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeedbackResource;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function setFeedback(Request $request){
        try {
            Feedback::where('id', $request->user_id)->update([
                'feedback' => $request->feedback
            ]);

            if($request->feedback_comment){
                Feedback::where('id', $request->user_id)->update([
                    'comment' => $request->feedback_comment
                ]);
            }

            return Response()->json(['message' => 'success']);
        }catch (\Exception $e){
            return Response()->json(['message' => $e]);
        }


    }

    public function getFeedback(Request $request){
        $userId = Auth::user()->id;
        $feedbacks = Feedback::where('user_id', $userId)->get();
        return FeedbackResource::collection($feedbacks);
    }

}
