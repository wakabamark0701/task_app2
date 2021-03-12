@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
                      <!-- Current Tasks -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        タスク
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>タスク</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                              <tr>
                              <td>
                              <form action="{{ route('task.destroy',['id'=>$task->id])}}" method="POST">
                                {{ csrf_field() }}
                                <button> 削除ボタン </button>

                              </form>
                              </td>

                                <td class="table-text">
                                  <div> {{ $task->content }}</div>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>


@endsection