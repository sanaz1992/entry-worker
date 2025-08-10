<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{__('attributes.companies')}}</h4>
                        <div class="card-header-form">
                            {{-- <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="جستجو">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>{{__('attributes.company_name')}}</th>
                                        <th>{{__('attributes.company_manager')}}</th>
                                        <th>{{__('attributes.workers_count')}}</th>
                                        <th>{{__('attributes.status')}}</th>
                                        <th>{{__('attributes.created_at')}}</th>
                                        <th>{{__('attributes.actions')}}</th>
                                    </tr>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{$company->title}}</td>
                                            <td>{{$company->user->full_name}}</td>
                                            <td></td>
                                            <td></td>
                                            <td>{{$company->created_at}}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">جزئیات</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>