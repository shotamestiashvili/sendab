<?php

namespace App\Nova\Actions;

use Illuminate\Support\Collection;
use Illuminate\View\View;
use Laravel\Nova\Fields\ActionFields;
use Padocia\NovaPdf\Actions\ExportToPdf;

class UserDownloadAction extends ExportToPdf
{
    /**
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     *
     * @return \Illuminate\View\View
     */



    public function preview(ActionFields $fields, Collection $models) : View
    {
        $resource = $this->resource;

        return view('nova-pdf.template', compact('models','resource', 'fields'));
    }

    protected function handleBrowsershotOptions()
    {
        $this->browsershot = $this->browsershot->format('A4');
        return $this;
    }

    protected function filename()
    {
        return "user_profile.pdf";

    }





}
