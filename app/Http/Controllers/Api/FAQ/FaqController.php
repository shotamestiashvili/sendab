<?php

namespace App\Http\Controllers\Api\FAQ;

use App\Http\Controllers\Controller;
use App\Http\Resources\FaqResource;
use App\Models\Faq;

class FaqController extends Controller
{

    public function getFaq(){
        $faq = Faq::get();
        return FaqResource::collection($faq);
    }

}
