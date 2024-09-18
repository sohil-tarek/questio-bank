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
                        <th nowrap="" class="text-center"><strong>إدارة الصف</strong></th>

                    </tr>
                    </thead>

                    <tbody>

                    <tr>

                        <td class="text-left">العلوم الفصل الدراسى الأول</td>

                        <td nowrap="nowrap" class="text-center"><a
                                href="{{route('subject')}}">إدارة الصف</a>
                        </td>

                    </tr>



                    </tbody>
                </table>
            </div>
        </div>

        <!-- /Basic initialization -->
    </div>

@endsection
