-- creates customer table 
CREATE TABLE CUSTOMER (
	-- assigns a unique id for every customer inserted
	CUS_ID int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    CUS_FNAME VARCHAR(15) not null,
    CUS_LNAME VARCHAR(15) not null,
    CUS_PHONE VARCHAR(12) not null
);
-- created item table
CREATE TABLE ITEM (
	ITEM_NUM int NOT NULL,
    CUS_ID int unsigned,
    ITEM_PRICE DECIMAL(10,2),
    ITEM_DESCRIPTION VARCHAR(255),
    -- cus_id in this table references cus_id from customer able
    FOREIGN KEY (CUS_ID) REFERENCES CUSTOMER (CUS_ID),
    -- checks to make sure the price is not less than 0.
    CONSTRAINT PRICE_CHK CHECK (ITEM_PRICE >= 0)
);
-- creates company table
CREATE TABLE COMPANY (
	COMPANY_ID INT,
    ITEM_NUM INT NOT NULL,
    COMPANY_NAME VARCHAR(25),
    COMPANY_ADDRESS VARCHAR(25),
    COMPANY_CITY VARCHAR(25),
    COMPANY_STATE VARCHAR(25),
    COMPANY_ZIP VARCHAR(10)
    -- item num in this table references item num in the item table
	-- FOREIGN KEY (COMPANY_ID) REFERENCES ITEM (COMPANY_ID)
);