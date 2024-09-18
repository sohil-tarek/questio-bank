@extends('dashboard.layouts.master')
@section('title','المعايير')
@section('content')


    <div class="content-wrapper one">
        <!-- Basic initialization -->
        <div class="panel panel-white">

            <div class="panel-flat">
                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th><strong>الاسم</strong></th>
                            <th nowrap="" class="text-center"><strong>إدارة المعيار</strong></th>

                        </tr>
                    </thead>

                    <tbody>

                        <tr>

                            <td class="text-left">مصر</td>

                            <td nowrap="nowrap" class="text-center"><a
                                    href="{{route('standard')}}">إدارة المعيار</a>
                            </td>

                        </tr>



                    </tbody>
                </table>
            </div>
        </div>

        <!-- /Basic initialization -->
    </div>

@endsection
