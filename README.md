taskの詳細
------

`task11`
------
<h2>メール送信機能を備えたお問い合わせフォームの作成</h2>
課題「メール送信機能を備えたお問い合わせフォームの作成」  
下記の要件に沿ってお問い合わせフォームを作成してみてください。  

### 基本要件 ###
+ フォームの項目は、「お名前」「件名」「メールアドレス」「本文」の4項目。  
+ フォームの項目が1つでも未入力の項目があれば、メールは送信されない。同時に、未入力の項目を赤文字で表示する。(例:「件名が未入力です」)  
+ フォームの項目が全て入力されていれば、mb_send_mail関数を使ってメールを自分のアドレス宛に送信されるようにし、「お問い合わせありがとうございます」というページが表示されるようにする。  
+ フォームのデザインをCSSによってある程度整えること。  
    
### 応用要件 ###
+ 「正規表現」について調べて、メールアドレスの形式が正しいかどうかを判別する機能を付け加える。  

------
<h2>task10: メール送信機能を備えたお問い合わせフォームの作成</h2>
### 基本要件 ###
- MySQLと連携させること  
- 画像を投稿できる掲示版を作成する。  
- 画像の形式は png, jpg の2種類とする。  
- 画面のデザインはCSSなどを用いてある程度整えること。  
- フォームの項目は「投稿者」「画像タイトル」「画像ファイル」の3項目。  
- フォームの項目に1つでも未入力事項があれば投稿はされず、未入力項目を赤文字で警告する。  
- 正しく投稿が完了した場合、「画像タイトル」@投稿者さん 投稿した日付とともに、画像が表示される。  
- 例: 「NOWALL創業！」@柏木さん 2014年8月28日  

------
<h2>task03: [PHP基礎] お問い合わせフォームを作成</h2>
### 事前準備 ###
[画面仕様.pdf](http://student.elite.sc/user/homeworks/71/download_handout/) をダウンロードして内容を確認します。  
  
### 基本要件 ###
画面仕様.pdf の内容にしたがってお問い合わせフォームを作成してください。   
フォームの見た目は、画面仕様の内容に近くなるようにHTMLを作成してください。   
(完全に同じでなくても構いませんが、なるべく近づけるようにしてみてください)  
  
入力されたお問い合わせ内容は、お問い合わせ完了時にCSV形式のファイルに保存するようにしてください。  
ファイル名は contact.csv としてください。  
CSV 形式とは以下のようにカンマでデータを区切るデータ形式の事です。  

    AAA1,BBB1,CCC1  
    AAA2,BBB2,CCC2  

詳細については、Google などで検索してみてください。(非常によく使われるデータ形式です)  
お問い合わせフォームの URL は自由とします。  
  
### 応用要件 ###
文字コードの種類について調べてみてください。  
CSVファイルが一般的にどのような文字コードで保存されるか、PHPを書くときの文字コードはどのような種類なのかを調べてみてください。  
(手元にエクセルやその他の表計算ソフトがある場合は、そのソフトでお問い合わせ内容を保存したCSVファイルを開いて正しく閲覧出来るか確認してみてください)  

