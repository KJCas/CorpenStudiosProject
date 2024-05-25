CREATE TABLE users(
    UserId int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Password varchar(200),
    UserType varchar(10) DEFAULT 'User',
    ADD COLUMN DateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ADD COLUMN DateModified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);