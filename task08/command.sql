-- task08完成版
create database task08;

use task08;

-- id, sale, month
create table sales (
id int primary key auto_increment,
sale int,
month int
);

-- member_id, name
create table members (
member_id int primary key auto_increment,
name varchar(32)
);

-- member_id, age
create table age (
member_id int primary key auto_increment,
age varchar(32)
);

insert into sales (id, sale, month) values
  ('1' , '75' , '4'),
  ('2' , '200' , '5'),
  ('3' , '15' , '6'),
  ('4' , '700' , '5'),
  ('5' , '672' , '4'),
  ('6' , '56' , '8'),
  ('7' , '231' , '9'),
  ('8' , '459' , '8'),
  ('9' , '8' , '7'),
  ('10' , '120' , '4');

insert into members (member_id, name) values
  ('1' , 'Tanaka'),
  ('2' , 'Sato'),
  ('3' , 'Suzuki'),
  ('4' , 'Tsuchiya'),
  ('5' , 'Yamada'),
  ('6' , 'Sasaki'),
  ('7' , 'Harada'),
  ('8' , 'Takahashi'),
  ('9' , 'Nishida'),
  ('10' , 'Nakada');

insert into age (member_id, age) values
  ('1' , '24'),
  ('2' , '25'),
  ('3' , '47'),
  ('4' , '55'),
  ('5' , '39'),
  ('6' , '26'),
  ('7' , '43'),
  ('8' , '33'),
  ('9' , '24'),
  ('10' , '20');


-- 1. 最大の売上を出した社員の名前
SELECT
  s.id,
  s.sale as '売上',
  m.name as '名前'
FROM
  sales as s
JOIN
  members as m
ON
  s.id = m.member_id
WHERE
  s.sale = (SELECT MAX(sale) FROM sales)
;
-- ORDER BY sale desc
-- LIMIT 1


-- 2. 売上の平均以上を達成した社員の名前
SELECT
  s.id,
  s.sale as '売上',
  m.name as '名前'
FROM
  sales as s
JOIN
  members as m
ON
  s.id = m.member_id
WHERE
  s.sale >= (SELECT avg(sale) FROM sales)
;


-- 3. 30代以下の社員が達成した売上の合計
SELECT
  SUM(s.sale) as '30歳以下売上合計'
FROM
  sales as s
JOIN
  age as a
ON
  s.id = a.member_id
WHERE
  a.age >= 30
;

