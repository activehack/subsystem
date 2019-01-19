CREATE TABLE IF NOT EXISTS accounts (
    id SERIAL,
    username character varying(32) NOT NULL,
    domain character varying(64) NOT NULL,
    label character varying(64) NOT NULL,
    usage integer NOT NULL,
    secret character varying(128) NOT NULL,
    status character varying(16) NOT NULL
) WITHOUT OIDS;

CREATE TABLE IF NOT EXISTS domains (
    id SERIAL,
    domain character varying(64) NOT NULL,
    status character varying(16) NOT NULL
) WITHOUT OIDS;

CREATE TABLE IF NOT EXISTS list_accounts (
    id SERIAL,
    name character varying(32) NOT NULL,
    domain character varying(64) NOT NULL,
    status character varying(16) NOT NULL
) WITHOUT OIDS;

CREATE TABLE IF NOT EXISTS list_members (
    id SERIAL,
    list_account character varying(96) NOT NULL,
    member_email character varying(96) NOT NULL,
    status character varying(16) NOT NULL
) WITHOUT OIDS;

ALTER TABLE ONLY accounts DROP CONSTRAINT IF EXISTS accounts_index0;
ALTER TABLE ONLY accounts ADD CONSTRAINT accounts_index0 UNIQUE (username, domain);
ALTER TABLE ONLY accounts DROP CONSTRAINT IF EXISTS accounts_pkey;
ALTER TABLE ONLY accounts ADD CONSTRAINT accounts_pkey PRIMARY KEY (id);
ALTER TABLE ONLY domains DROP CONSTRAINT IF EXISTS domains_index0;
ALTER TABLE ONLY domains ADD CONSTRAINT domains_index0 UNIQUE (domain);
ALTER TABLE ONLY domains DROP CONSTRAINT IF EXISTS domains_pkey;
ALTER TABLE ONLY domains ADD CONSTRAINT domains_pkey PRIMARY KEY (domain);
ALTER TABLE ONLY list_accounts DROP CONSTRAINT IF EXISTS list_accounts_index0;
ALTER TABLE ONLY list_accounts ADD CONSTRAINT list_accounts_index0 UNIQUE (name, domain);
ALTER TABLE ONLY list_accounts DROP CONSTRAINT IF EXISTS list_accounts_pkey;
ALTER TABLE ONLY list_accounts ADD CONSTRAINT list_accounts_pkey PRIMARY KEY (id);
ALTER TABLE ONLY list_members DROP CONSTRAINT IF EXISTS list_members_index0;
ALTER TABLE ONLY list_members ADD CONSTRAINT list_members_index0 UNIQUE (list_account,member_email);
ALTER TABLE ONLY list_members DROP CONSTRAINT IF EXISTS list_members_key;
ALTER TABLE ONLY list_members ADD CONSTRAINT list_members_key PRIMARY KEY (id);
CREATE INDEX IF NOT EXISTS domains_index1 ON domains USING btree (status);
CREATE INDEX IF NOT EXISTS domains_index2 ON domains USING btree (domain, status);
CREATE INDEX IF NOT EXISTS list_account_index1 ON list_accounts USING btree (status, name, domain);
CREATE INDEX IF NOT EXISTS list_member_index1 ON list_members USING btree (list_account, status);
