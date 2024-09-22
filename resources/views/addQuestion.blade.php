@extends('dashboard.layouts.master')
@section('title','المعايير')
@section('content')

    <div class="content-wrapper one">
        <!-- Basic initialization -->
        <div class="panel panel-white">
            <div class="panel-flat">
                <div class="container mt-5">
                    <h2>أضافة الأسئله</h2>
                    <form id="questionForm">
                        <!-- Question Type Input -->
                        <div class="mb-3">
                            <label for="questionType" class="form-label">نوع السؤال</label>
                            <input type="text" class="form-control" id="questionType" name="questionType" placeholder="Enter question type " required>
                        </div>

                        <!-- Difficulty Input -->
                        <div class="mb-3">
                            <label for="difficulty" class="form-label">مستوى الصعوبه</label>
                            <input type="number" class="form-control" id="difficulty" name="difficulty" placeholder="Enter difficulty" required>
                        </div>

                        <!-- Topic Input -->
                        <div class="mb-3">
                            <label for="topic" class="form-label">ناتج التعلم</label>
                            <input type="text" class="form-control" id="topic" name="topic" placeholder="Enter Learning out come" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">اضافه السؤال</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')

    @include('script')
@endsection

