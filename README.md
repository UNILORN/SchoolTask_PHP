# ToDoList 01
## 機能
- DB連携
- Add,Delete,Edit機能
- チェック量を％とグラフ表示
- 音声入力機能
- 音声操作機能

## DB連携
MySQLでテーブル一つを使用し、DB連携をとっています。権限は現在使用しているテーブルのみの権限となっています。

## Add,Delete,Edit機能
すべて実装済みです。

## チェック量を％とグラフ表
Twitter BootStrapと
JQuery　を使用し、チェックした際にすぐに反映されるように設定しています。

## 音声入力機能
音声マークを押し、マイクを許可すると音声認証をすることができます。

指定の言葉以外の言葉はすべてリストに追加されるようになっており、本当にその言葉が正しいかのモーダルウィンドウが開かれます。

OKを押すとリストに反映します。

## 音声操作機能
現時点で
- 消して
- 全部消して
- 全部チェックして
- 全部チェック外して

の４項目の音声操作が行えます。
### 消して
チェックされた項目を消します。Deleteボタンと同じ役割です。

### 全部消して
全部消します。ページ関係なしなので、ALL消去のときに便利です。

### 全部チャックして
全部チェックします。チェックした際、すぐにプログレスバーにも反映されます。

### 全部チェック外して
全部チェックはずします。便利です。