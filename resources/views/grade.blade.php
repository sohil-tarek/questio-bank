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
                        <th nowrap="" class="text-center"><strong>إدارة المواد</strong></th>

                    </tr>
                    </thead>

                    <tbody>

                    <tr>

                        <td class="text-left">الصف ألأول الأعدادى</td>

                        <td nowrap="nowrap" class="text-center"><a
                                href="{{route('subject')}}"> المواد</a>
                        </td>

                    </tr>



                    </tbody>
                </table>
            </div>
        </div>

        <!-- /Basic initialization -->
    </div>

@endsection
