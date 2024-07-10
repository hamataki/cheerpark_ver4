# cheerpark_ver4
①課題番号-プロダクト名  
cheerpark_ver4

②課題内容（どんな作品か）  
ログイン機能＋

③DEMO
デプロイしている場合はURLを記入（任意） https://cheerpark.sakura.ne.jp/cheerpark_ver4/index.php

④作ったアプリケーション用のIDまたはPasswordがある場合  
ID: 〇〇〇〇〇〇〇〇
PW: 〇〇〇〇〇〇〇〇

⑤工夫した点・こだわった点

1.紙に全体像を書き出す

2.Login.php→post.php→home.phpのhtmlだけ作成

3.画面遷移を追加

4.funcs.phpでDB接続関数とSQLエラー関数、リダイレクト関数を作成
 
5.insert.phpでDBに保存、今回は写真のアップロードに初挑戦!!  
-[参照]　画像保存：https://zenn.dev/zennzenn_ok/articles/b910505b811cd7

6.home.phpに写真を表示、base64使用  
-取得した画像バイナリデータをbase64で変換して表示

7.edit.php,update.phpで編集機能追加  
-selectタグのデータ保持　かずまさんのコードを参考にした
-画像のdb更新に苦戦　なっちゃんさんのコードを参考にした  
画像は画像の有無を確認してからじゃないと更新できない//if ($_SERVER['REQUEST_METHOD'] == 'POST')//

8.フッター部分のhtml化　文字数削減

9.delete.phpで削除機能追加


⑦質問・疑問・感想、シェアしたいこと等なんでも  
・[感想]  
・[参照]　画像保存：https://zenn.dev/zennzenn_ok/articles/b910505b811cd7,  
ファイルアップロードおまじない：https://mugenup-tech.hatenadiary.com/entry/2014/08/28/100910,  
