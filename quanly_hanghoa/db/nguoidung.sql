-- Adminer 4.6.3 PostgreSQL dump

DROP TABLE IF EXISTS "nguoidung";
DROP SEQUENCE IF EXISTS nguoidung_id_seq;
CREATE SEQUENCE nguoidung_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 START 1 CACHE 1;

CREATE TABLE "public"."nguoidung" (
    "id" integer DEFAULT nextval('nguoidung_id_seq') NOT NULL,
    "ten" character varying,
    "tuoi" integer,
    "diachi" character varying,
    "email" character varying,
    "sdt" character varying
) WITH (oids = false);

COMMENT ON COLUMN "public"."nguoidung"."ten" IS 'Tên';

COMMENT ON COLUMN "public"."nguoidung"."tuoi" IS 'Tuổi';

COMMENT ON COLUMN "public"."nguoidung"."diachi" IS 'Địa chỉ';

COMMENT ON COLUMN "public"."nguoidung"."email" IS 'Email';

COMMENT ON COLUMN "public"."nguoidung"."sdt" IS 'Số điện thoại';

INSERT INTO "nguoidung" ("id", "ten", "tuoi", "diachi", "email", "sdt") VALUES
(2,	'Khang',	20,	'Xóm 5, ngõ 8, Hà Nội',	'khang@vinagit.com',	'2453646'),
(7,	'Tôi là Haha',	18,	'hahahaha',	'haha@vinagit.com',	'68989'),
(1,	't13333333',	657,	'gjk hohk',	't1@vinagit.com',	'8578689689');

-- 2019-08-20 19:10:44.914871+07
