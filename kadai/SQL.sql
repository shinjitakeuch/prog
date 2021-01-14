-- 用意されているコマンドに関しては大文字を使う
INSERT INTO gs_bm_table(company,brandname,items,comment,datetime)VALUES('サツドラ','wellnessnavi',ビタアルト,'低価格で高品質',sysdate())
INSERT INTO gs_bm_table(company,brandname,items,comment,datetime)VALUES('イオン','TOPVALUE',ヨーグルト,'安いけどおいしくない',sysdate())
INSERT INTO gs_bm_table(company,brandname,items,comment,datetime)VALUES('西友','みなさまのお墨付き',牛乳,'新鮮',sysdate())
INSERT INTO gs_bm_table(company,brandname,items,comment,datetime)VALUES('サツドラ','クレアーレ',トイレットペーパー,'コスパ最強＆使いやすさ抜群でリピート確定',sysdate())

-- データ取得
SELECT * FROM gs_bm_table
SELECT name,brandname FROM gs_bm_table
SELECT * FROM gs_bm_table WHERE id=1
SELECT * FROM gs_bm_table WHERE company='サツドラ'
SELECT * FROM gs_bm_table WHERE items='ヨーグルト'
SELECT * FROM gs_bm_table WHERE id=1 OR id=2 OR id=10
SELECT * FROM gs_bm_table WHERE name LIKE 
SELECT * FROM gs_bm_table ORDER BY id DESC;     --DESC=昇順,ASC=昇順
SELECT * FROM gs_bm_table ORDER BY id DESC LIMIT 3;     --上から３

