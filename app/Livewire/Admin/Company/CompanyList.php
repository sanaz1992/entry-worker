<?php

namespace App\Livewire\Admin\Company;

use App\Livewire\Admin\AdminBaseComponent;
use App\Repositories\Contracts\CompanyRepositoryInterface;
use Livewire\Component;

class CompanyList extends AdminBaseComponent
{

    public function render(CompanyRepositoryInterface $companyRepository)
    {
        $companies = $companyRepository->all();

        return $this->renderView(
            'livewire.admin.company.company-list',
            compact('companies')
        )->layoutData([
            'title' => 'لیست شرکت ها'
        ]);
    }
}
