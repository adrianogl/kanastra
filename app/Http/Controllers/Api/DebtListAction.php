<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DebtListAction extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->parseData($request->getContent());
    }

    private function parseData(string $data): array
    {
        $items = str_getcsv($data, "\n");

        $body = [];
        foreach ($items as $key => $item) {
            if ($key === 0) {
                $header = explode(',', $item);
                continue;
            }

            $body[] = explode(',', $item);
        }

        return [
            'header' => $header,
            'body' => $body,
        ];
    }
}
