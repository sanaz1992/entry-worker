<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\Contracts\CompanyRepositoryInterface;

class CompanyRepository extends BaseRepository implements CompanyRepositoryInterface
{
    public function __construct(Company $model)
    {
        parent::__construct($model);
    }

    public function create(array $data): Company
    {
        return Company::create([
            'title'        => $data['title'],
            'warehouse_id' => $data['warehouse_id'],
            'unit'         => $data['unit'],
        ]);
    }

    public function update(Company $company, array $data): Company
    {
        // $warehouseItem->update([
        //     'title' => $data['title'],
        //     'unit'  => $data['unit'],
        // ]);
        return $company;
    }
}
