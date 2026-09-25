CREATE DATABASE IF NOT EXISTS keijiban
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE keijiban;

CREATE TABLE comment (
    comment_number INT NOT NULL PRIMARY KEY,
    user_id VARCHAR(255) NOT NULL,
    text TEXT NOT NULL,
    dt DATETIME NOT NULL
);
