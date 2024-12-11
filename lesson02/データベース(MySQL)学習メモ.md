# データベース(MySQL)学習メモ

## テーブル作成(create)
- my_itemsテーブルを作成する。
- id, item_name, priceの3つのカラムを持つテーブルを作成する。
  - idはint型、item_nameはtext型、priceはint型で作成する。
- 以下のSQL文を実行すると、my_itemsテーブルが作成される。
  ```
  CREATE TABLE my_items (id int, item_name text, price int);
  ```
  
## データ挿入(insert)
- my_itemsテーブルにデータを挿入する。
- 以下のSQL文を実行すると、my_itemsテーブルにデータが挿入される。
- 例えば、id=1, item_name='いちご', price=200のデータを挿入する場合は、以下のSQL文を実行する。
- my_itemsテーブルにデータが挿入される。
  ```
  INSERT INTO my_items SET id = 1, item_name = 'いちご', price = 200;
  ```
  
- また、以下のSQLでも正しくデータが挿入される
- my_itemsテーブルにデータが挿入される。
- id=2, item_name='もも', price=500のデータが挿入される。
  ```
  INSERT INTO my_items VALUES (2, 'もも', 500);
  ```
  
## データ更新(update)
- my_itemsテーブルのデータを更新する。
- 以下のSQL文を実行すると、my_itemsテーブルのデータが更新される。
- 例えば、id=1のデータのpriceを180に更新する場合は、以下のSQL文を実行する。
- my_itemsテーブルのデータが更新される。
  ```
  UPDATE my_items SET price = 180 WHERE id = 1;
  ```
  
- また、以下のSQLでも正しくデータが更新される
- id=1のデータのpriceを180に更新し、item_nameを'とちおとめ'に更新する。
- my_itemsテーブルのデータが更新される。
  ```
  UPDATE my_items SET price = 180, item_name = "とちおとめ" WHERE id = 1;
  ```
  
- 条件(WHERE)がないSQL文を実行すると、全てのデータが更新される。
- 例えば、priceを100に更新する場合は、以下のSQL文を実行する。
- my_itemsテーブルのデータが更新される。
  ```
  UPDATE my_items SET price = 100;
  ```
  
## データ削除(delete)
- my_itemsテーブルのデータを削除する。
- 以下のSQL文を実行すると、my_itemsテーブルのデータが削除される。
- 例えば、id=1のデータを削除する場合は、以下のSQL文を実行する。
- my_itemsテーブルのデータが削除される。(ただし、id=1のデータが存在しない場合は、何も削除されない。)
  ```
  DELETE FROM my_items WHERE id = 1;
  ```
  
- 条件(WHERE)がないSQL文を実行すると、全てのデータが削除される。
- 例えば、以下のSQL文を実行すると、my_itemsテーブルの全てのデータが削除される。
- my_itemsテーブルの全てのデータが削除される。
  ```
  DELETE FROM my_items;
  ```
  
## データ検索(select)
- my_itemsテーブルのデータを検索する。
- 以下のSQL文を実行すると、my_itemsテーブルのデータが検索される。
- 例えば、my_itemsテーブルのitem_nameカラムのみを検索(表示)する場合は、以下のSQL文を実行する。
- my_itemsテーブルの全てのデータが検索される。
  ```
  SELECT item_name FROM my_items;
  ```
  
- また、idとpriceも一緒に表示させたい場合は、以下のSQL文を実行する。
- my_itemsテーブルの全てのデータが検索される。
  ```
  SELECT id, item_name, price FROM my_items;
  ```
  
- カラムを指定せずに全てのカラムを検索(表示)する場合は、以下のSQL文を実行する。
- my_itemsテーブルの全てのデータが検索される。
  ```
  SELECT * FROM my_items;
  ```
  
- 条件(WHERE)を指定して検索する場合は、以下のSQL文を実行する。
- 例えば、idが1のデータを検索する場合は、以下のSQL文を実行する。
- my_itemsテーブルのid=1のデータが検索される。
  ```
  SELECT * FROM my_items WHERE id = 1;
  ```
  
## プライマリーキー(PRIMARY KEY)設定
- プライマリーキーを設定することで、データの重複を防ぐことができる。
- 以下のSQL文を実行すると、idカラムにプライマリーキーを設定する。
- my_itemsテーブルのidカラムにプライマリーキーが設定される。
  ```
  ALTER TABLE my_items ADD PRIMARY KEY (id);
  ```
  
## オートインクリメント(AUTO_INCREMENT)設定
- オートインクリメントを設定することで、idカラムに自動で連番を振ることができる。
- 以下のSQL文を実行すると、idカラムにオートインクリメントを設定する。
- my_itemsテーブルのidカラムにオートインクリメントが設定される。
  ```
  ALTER TABLE my_items MODIFY id INT AUTO_INCREMENT;
  ```
  
## テーブル構造の変更
- テーブル構造を変更する。
- 以下のSQL文を実行すると、my_itemsテーブルのkeywordカラムをtext型で追加する。
- my_itemsテーブルのkeywordカラムが追加される。
  ```
  ALTER TABLE my_items ADD keyword text;
  ```
  
- また、以下のSQL文を実行すると、my_itemsテーブルのkeywordカラムをtinytext型で変更する。
- my_itemsテーブルのkeywordカラムがtinytext型に変更される。
  ```
  ALTER TABLE my_items MODIFY keyword tinytext;
  ```
  
- さらに、以下のSQL文を実行すると、my_itemsテーブルのkeywordカラムを削除する。
- my_itemsテーブルのkeywordカラムが削除される。
  ```
  ALTER TABLE my_items DROP keyword;
  ```
  
## いろいろな条件での検索(WHERE)
- 不等号を使った検索
  - 例えば、idが1より大きいデータを検索する場合は、以下のSQL文を実行する。
    ```
    SELECT * FROM my_items WHERE id > 1;
    ```
  - idが1以上のデータを検索する場合は、以下のSQL文を実行する。
    ```
    SELECT * FROM my_items WHERE id >= 1;
    ```
  - idが1でないデータを検索する場合は、以下のSQL文を実行する。
    ```
    SELECT * FROM my_items WHERE id != 1;
    ```

- LIKE検索を使った検索
  - 例えば、keywordが'甘い'で始まるデータを検索する場合は、以下のSQL文を実行する。
    ```
    SELECT * FROM my_items WHERE keyword LIKE '甘い%';
    ```
  - keywordが'甘い'で終わるデータを検索する場合は、以下のSQL文を実行する。
    ```
    SELECT * FROM my_items WHERE keyword LIKE '%甘い';
    ```
  - keywordに'甘い'が含まれるデータを検索する場合は、以下のSQL文を実行する。
    ```
    SELECT * FROM my_items WHERE keyword LIKE '%甘い%';
    ```
    
- AND条件を使った検索
  - 例えば、priceが100より大きい且つ、priceが200より低いデータを検索する場合は、以下のSQL文を実行する。
    ```
    SELECT * FROM my_items WHERE price > 100 AND price < 200;
    ```
    
- OR条件を使った検索
  - 例えば、priceが100より大きいまたは、priceが200より低いデータを検索する場合は、以下のSQL文を実行する。
    ```
    SELECT * FROM my_items WHERE price > 100 OR price < 200;
    ```
    
## データのソート(ORDER BY)
- priceを昇順でソートする場合は、以下のSQL文を実行する。
  ```
  SELECT * FROM my_items ORDER BY price ASC;
  ```
  
- priceが100円より大きいデータをpriceの昇順でソートする場合は、以下のSQL文を実行する。
  ```
  SELECT * FROM my_items WHERE price > 100 ORDER BY price ASC;
  ```
  
- カタカタ(item_name_kana)を昇順でソートする場合は、以下のSQL文を実行する。
  ```
  SELECT * FROM my_items ORDER BY item_name_kana;
  ```

- salesを降順でソートする場合は、以下のSQL文を実行する。
  ```
  SELECT * FROM my_items ORDER BY sales DESC;
  ```
  
## SQLの便利な計算機能
- count()
  - データの件数を取得する。
  - 例えば、my_itemsテーブルのデータの件数を取得する場合は、以下のSQL文を実行する。
    ```
    SELECT count(*) FROM my_items;
    ```
    
- sum()
  - データの合計値を取得する。
  - 例えば、my_itemsテーブルのpriceの合計値を取得する場合は、以下のSQL文を実行する。
    ```
    SELECT sum(price) FROM my_items;
    ```

- max()
  - データの最大値を取得する。
  - 例えば、my_itemsテーブルのsalesの最大値を取得する場合は、以下のSQL文を実行する。
    ```
    SELECT max(sales) FROM my_items;
    ```

- min()
  - データの最小値を取得する。
  - 例えば、my_itemsテーブルのsalesの最小値を取得する場合は、以下のSQL文を実行する。
    ```
    SELECT min(sales) FROM my_items;
    ```
    
- avg()
  - データの平均値を取得する。
  - 例えば、my_itemsテーブルのpriceの平均値を取得する場合は、以下のSQL文を実行する。
    ```
    SELECT avg(price) FROM my_items;
    ```
    
## リレーションのSQL
- リレーションを使って、複数のテーブルを連結する。
  - 以下のSQL文を実行すると、makersテーブルとmy_itemsテーブルを連結し、makersテーブルのidとmy_itemsテーブルのmaker_idが一致するデータを検索する。
    ```
    SELECT * FROM makers, my_items WHERE makers.id = my_items.maker_id;
    ```
  - 以下のSQLでも同様の結果が得られる。
    ```
    SELECT * FROM makers m, my_items i  WHERE m.id = i.maker_id;
    ```
    
## グループごとに集約する(GROUP BY)
- GROUP BYを使って、データをグループ化する。
  - 以下のSQLを実行すると、cartsテーブルのitem_idごとの合計個数(count)を取得する。
    ```
    SELECT item_id, sum(count) FROM carts GROUP BY item_id;
    ```
  - 以下のSQLを実行すると、my_itemsテーブルとcartsテーブルを連結し、my_itemsテーブルのidとcartsテーブルのitem_idが一致するデータをグループ化(GROUP BY)し、item_idごとの合計個数(count)を取得する。
    ```
    SELECT item_id, item_name, SUM(count) FROM my_items, carts WHERE my_items.id = carts.item_id GROUP BY item_id;
    ```
    - 以下のSQLでも実行結果が同様になる
      ```
      SELECT my_items.id, item_name, SUM(count) FROM my_items, carts WHERE my_items.id = carts.item_id GROUP BY item_id;
      ```
    - 以下のSQLでも実行結果が同様になる
      ```
      SELECT m.id, item_name, SUM(count) FROM my_items m, carts WHERE m.id = carts.item_id GROUP BY item_id;
      ```
      
## 一方のテーブルのデータはすべて表示できるようにする(LEFT JOIN/RIGHT JOIN)
- LEFT JOINを使って、一方のテーブルのデータはすべて表示できるようにする。
  - 以下のSQLを実行すると、my_itemsテーブルの全てのデータとcartsテーブルのitem_idごとの合計個数(count)を取得する。
    ```
    SELECT item_name, sum(count) FROM my_items LEFT JOIN carts ON my_items.id = carts.item_id GROUP BY item_name;
    ```

- RIGHT JOINを使って、一方のテーブルのデータはすべて表示できるようにする。
  - 以下のSQLを実行すると、my_itemsテーブルの全てのデータとcartsテーブルのitem_idごとの合計個数(count)を取得する。
    ```
    SELECT item_name, sum(count) FROM my_items RIGHT JOIN carts ON my_items.id = carts.item_id GROUP BY item_name;
    ```
  - 以下のSQLを実行すると、cartsテーブルの全てのデータとmy_itemsテーブルのitem_nameごとの合計個数(count)を取得する。(LEFT JOINのSQL例と同じ結果が得られる)
    ```
    SELECT item_name, sum(count) FROM carts RIGHT JOIN my_items ON my_items.id = carts.item_id GROUP BY item_name;
    ```

- INNER JOINを使って、両方のテーブルのデータが一致するデータのみを取得する。
  - 以下のSQLを実行すると、my_itemsテーブルとcartsテーブルを連結し、my_itemsテーブルのitem_nameとcartsテーブルのitem_idが一致するデータを取得する。
    ```
    SELECT item_name, sum(count) FROM carts INNER JOIN my_items ON my_items.id = carts.item_id GROUP BY item_name;
    ```
    
## 便利なSQL構文いろいろ
- DISTINCTを使って、重複を除いたデータを取得する。
  - 以下のSQLを実行すると、cartsテーブルのitem_idの重複を除いたデータを取得する。
    ```
    SELECT DISTINCT item_id FROM carts;
    ```
    
- BETWEENを使って、範囲を指定してデータを取得する。
  - 以下のSQLを実行すると、priceが100円以上1000円以下のデータを取得する。
    ```
    SELECT * FROM my_items WHERE price BETWEEN 100 AND 1000;
    ```
    
- INを使って、複数の条件でデータを取得する。
  - 以下のSQLを実行すると、idが1または3のデータを取得する。
    ```
    SELECT * FROM my_items WHERE id in (1, 3);
    ```
    
- LIMITを使って、データの取得件数を制限する。
  - 以下のSQLを実行すると、my_itemsテーブルのデータを2件取得する。
    ```
    SELECT * FROM my_items LIMIT 2;
    ```
  - 以下のSQLを実行すると、my_itemsテーブルのデータを2件目から3件取得する。
    ```
    SELECT * FROM my_items LIMIT 2, 3;
    ```

- ASを使って、カラム名を変更する。
  - 以下のSQLを実行すると、cartsテーブルのcountカラムをsales_countとして取得する。
    ```
    SELECT SUM(count) AS sales_count FROM carts;
    ```
    
## 3つのテーブルのリレーション
- 3つのテーブルを連結する。
  - 以下のSQLを実行すると、
    ```
    SELECT 
        m.name, 
        i.item_name, 
        sum(c.count) AS sales_count 
    FROM
        makers m,
        my_items i
    LEFT JOIN
        carts c
        ON i.id = c.item_id
    WHERE
        m.id = i.maker_id
    GROUP BY
        m.name,
        i.item_name
    ORDER BY
        sales_count DESC;
    ```

## DBのエクスポートとインポート(バックアップとリストア)
- コマンドプロンプトまたは、PowerShellを起動して、以下のコマンドを実行し、ディレクトリ移動する
  ```
  cd C:\MAMP\bin\mysql\bin
  ```
  
- 以下のコマンドを実行すると、MySQLにログインできる。
  ```
  mysql -u root -p -h 127.0.0.1 -P 8889
  ```
  
- 受け入れようの新しいデータベースを作成する。
  ```
  create database mydb_new;
  ```
  
- MySQLからログアウトする。
  ```
  exit
  ```
  - 以下のコマンドでもログアウト可能
    ```
    \q
    ```
  
- DBのエクスポート(バックアップ)
  - 以下のコマンドを実行すると、mydb_backupFile.sqlというファイルが作成され、mydbのデータがエクスポートされる。
    ```
    mysqldump -u root -p -h 127.0.0.1 -P 8889 mydb > mydb_backupFile.sql
    ```
    
- DBのインポート(リストア)
  - 以下のコマンドを実行すると、mydb_newのDBが作成され、mydb_backupFile.sqlのデータがインポートされる。
    ```
    mysql -u root -p -h 127.0.0.1 -P 8889 mydb_new < mydb_backupFile.sql
    ```