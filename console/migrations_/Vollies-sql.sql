/* SQLEditor (MySQL (2))*/

CREATE TABLE IF NOT EXISTS user
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
role_id int(11) UNSIGNED DEFAULT 2 NOT NULL,
status smallint(6) NOT NULL,
email varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
username varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
password varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
auth_key varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
access_token varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
logged_in_ip varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
logged_in_at TIMESTAMP DEFAULT NULL,
created_ip varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
created_at TIMESTAMP DEFAULT NULL,
updated_at TIMESTAMP DEFAULT NULL,
banned_at TIMESTAMP DEFAULT NULL,
banned_reason varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS profile
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
user_id int(11) UNSIGNED DEFAULT 0 NOT NULL,
givenName varchar(32) CHARACTER SET utf8 NOT NULL,
familyName varchar(32) CHARACTER SET utf8 NOT NULL,
preferredName varchar(32) CHARACTER SET utf8 DEFAULT NULL,
email varchar(64) CHARACTER SET utf8 NOT NULL,
phone1 varchar(24) CHARACTER SET utf8 DEFAULT NULL,
phone2 varchar(24) CHARACTER SET utf8 DEFAULT NULL,
address1 varchar(255) CHARACTER SET utf8 DEFAULT NULL,
address2 varchar(255) CHARACTER SET utf8 DEFAULT NULL,
locality varchar(64) CHARACTER SET utf8 NOT NULL,
state varchar(16) CHARACTER SET utf8 DEFAULT 'Qld',
postcode varchar(12) CHARACTER SET utf8 DEFAULT NULL,
country varchar(32) CHARACTER SET utf8 DEFAULT 'Australia',
emergencyContact varchar(64) CHARACTER SET utf8 NOT NULL,
emergencyPhone1 varchar(24) CHARACTER SET utf8 NOT NULL,
emergencyPhone2 varchar(24) CHARACTER SET utf8 DEFAULT NULL,
rsa tinyint(1) DEFAULT '0' NOT NULL,
id_1 int(11) UNSIGNED NOT NULL,
dl_c tinyint(1) DEFAULT '0' NOT NULL,
dl_h tinyint(1) DEFAULT '0' NOT NULL,
cse tinyint(1) DEFAULT '0' NOT NULL,
ohs tinyint(1) DEFAULT '0' NOT NULL,
vol tinyint(1) DEFAULT '0' NOT NULL,
mmfVol tinyint(1) DEFAULT '0' NOT NULL,
mmfAtt tinyint(1) DEFAULT '0' NOT NULL,
discovery varchar(24) CHARACTER SET utf8 DEFAULT NULL,
discoveryDetail varchar(255) CHARACTER SET utf8 DEFAULT NULL,
full_name varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
timezone varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
created_at TIMESTAMP DEFAULT NULL,
created_by int(11) UNSIGNED DEFAULT '0' NOT NULL,
updated_at TIMESTAMP DEFAULT NULL,
updated_by int(11) UNSIGNED DEFAULT '0' NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;







ALTER TABLE profile ADD FOREIGN KEY `profile_user_id` (user_id) REFERENCES user (id);



