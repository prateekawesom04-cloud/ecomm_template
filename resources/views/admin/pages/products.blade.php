@extends('admin.master')

@section('body')

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            This week
          </button>
        </div> --}}
      </div>

      @section('additional_th')
        <th>
          Action
        </th>
      @endsection
      
      {{-- @include('admin.includes.admin_table') --}}

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              @foreach($columns as $column)
              <th scope="col">{{str_replace('_',' ',$column)}}</th>
              @endforeach
              @yield('additional_th')
            </tr>
          </thead>
          <tbody class="table_body">
            @foreach($pageData as $data)
            <tr>
              @foreach($columns as $column)
            
              @if($column=='image')
              <td>
                <img class="" src="{{asset('storage').'/'.json_decode($data->image)[0]}}" alt="" style="width:80px">
              </td>
              @else
              <td>{{$data->$column}}</td>
              @endif
              @endforeach
              
              @if($data->product_id)
              <td>
                <div class="flex flex-row items-center justify-evenly" style="width: 30px;">
                    <a href="{{route('pages.product',$data->product_id)}}" class="p-[.1rem]">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2.42012 12.7132C2.28394 12.4975 2.21584 12.3897 2.17772 12.2234C2.14909 12.0985 2.14909 11.9015 2.17772 11.7766C2.21584 11.6103 2.28394 11.5025 2.42012 11.2868C3.54553 9.50484 6.8954 5 12.0004 5C17.1054 5 20.4553 9.50484 21.5807 11.2868C21.7169 11.5025 21.785 11.6103 21.8231 11.7766C21.8517 11.9015 21.8517 12.0985 21.8231 12.2234C21.785 12.3897 21.7169 12.4975 21.5807 12.7132C20.4553 14.4952 17.1054 19 12.0004 19C6.8954 19 3.54553 14.4952 2.42012 12.7132Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M12.0004 15C13.6573 15 15.0004 13.6569 15.0004 12C15.0004 10.3431 13.6573 9 12.0004 9C10.3435 9 9.0004 10.3431 9.0004 12C9.0004 13.6569 10.3435 15 12.0004 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>

                </div>
              </td>
              @endif
              @yield('additional_td')
            </tr>
            @endforeach
          </tbody>
        </table>

@endsection