# README

# アプリ名
task app2

# 概要
自分のタスクを書き出して管理していくアプリ。
2021.4.2 タスク投稿・一覧表示・詳細画面推移・タスク削除機能を搭載

# 本番環境
URL:https://github.com/wakabamark0701/task_app2
テストメールアドレス：なし（ログイン機能実装予定） 
テストパスワード：なし（ログイン機能実装予定） 

# どんな課題や不便なことを解決するためにこのアプリを作ったのか。
laravel＋PHPの学習用のアウトプットとして作成致しました。
現在は必要最低限の機能のみ実装しているので今後学習を進めながら順次機能を追加していきます。



# DEMO画面
### タスク投稿・タスク一覧画面
<img width="724" alt="トップページ" src="https://user-images.githubusercontent.com/67129169/113373125-27b51d80-93a5-11eb-90f2-88a1f6304bd5.png">

### タスク詳細画面・削除ボタン
<img width="724" alt="食品DB画面" src="https://user-images.githubusercontent.com/67129169/113373986-ffc6b980-93a6-11eb-93a8-c51e6da20548.png">




# 工夫したポイント
・トップページにタスク投稿とタスク一覧表示をさせること使いやすくしている。
・摂取量の投稿についてタイミングをラジオボタンで選択出来るように実装。  
・名前のボードにちなんでデザインを木目調にしている。  

# 使用技術
html,css(bootstrap),php,larevel,git,MySQL  

# 課題や今後実装したい機能
・ログイン・ログアウト機能  
・タスク編集・更新機能
・タスク期限日時項目追加  

# DB設計
# tasksテーブル
|Column|Type|Options|
|------|----|-------|
|id|integer|auto_increment|
|content|string|
|created_at|timestamp|not_null|
|updated_at|timestamp|not_null|

