@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    新規タスク入力フォーム
                </div>

                <div class="panel-body">
                    <!-- New Task Form -->
                    <form action="{{ route('task.store')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">タスク名</label>

                            <div class="col-sm-6">
                                <input type="text" name="content" id="task-name" class="form-control" value="{{ old('content') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>タスク追加
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        現存タスク
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>タスク</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach( $tasks as $task )
                              <tr>
                              <td class="table-text">
                                  <div> {{ $task->content }}</div>
                              </td>
                              <td>
                                <a href="{{route('task.show',['id'=>$task->id] )}}">詳細を見る</a>
                              </td>
                              <td>
                              ボタン2
                              </td>

                               
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>

<script>
function deletePost(e){
    'use strict';
    if (confirm('本当に削除してもいいですか？')){
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>
@endsection