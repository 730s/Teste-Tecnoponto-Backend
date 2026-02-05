<?php

namespace App\Services;

use App\Models\SearchLogs;

class AuditService
{
    public function listLogs()
    {
        return SearchLogs::orderBy('searched_at', 'desc')->get();
    }
}
