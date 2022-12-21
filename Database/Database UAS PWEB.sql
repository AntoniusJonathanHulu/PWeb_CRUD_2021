CREATE DATABASE uas_pweb_2021_ganjil;

USE uas_pweb_2021_ganjil;

CREATE TABLE karyawan
(
	kr_kode VARCHAR(10) NOT NULL PRIMARY KEY,
	kr_nama VARCHAR(100) NOT NULL,
	kr_dob DATE NOT NULL,
	kr_jk ENUM ('L','P') NOT NULL DEFAULT 'L'
);

CREATE TABLE proyek
(
	py_kode VARCHAR(10) NOT NULL PRIMARY KEY,
	py_nama VARCHAR(100) NOT NULL,
	py_deadline DATE NOT NULL,
	py_nominal INT NOT NULL DEFAULT 1000000
);

CREATE TABLE karyawan_proyek
(
	kp_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	kr_kode VARCHAR(10) NOT NULL,
	py_kode VARCHAR(10) NOT NULL,
	kp_bonus INT,
	FOREIGN KEY (kr_kode) REFERENCES karyawan (kr_kode),
	FOREIGN KEY (py_kode) REFERENCES proyek (py_kode)
);

