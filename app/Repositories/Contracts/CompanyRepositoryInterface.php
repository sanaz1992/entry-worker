<?php

namespace App\Repositories\Contracts;

use App\Models\Company;

interface CompanyRepositoryInterface extends BaseRepositoryInterface
{
    public function create(array $data): Company;
    public function update(Company $company, array $data): Company;
}
