nmap
====

[Download now](https://nmap.org/download)


```sh
# All bells & whistles
nmap --help
```

Scan a server/IP for all open ports:

```sh
# Fast scan (+/-30s)
nmap -sT -T4 10.23.10.10 -Pn

# Scan everything (+/- 10min)
nmap -sT -sV -O -T4 10.23.10.10 -p- -Pn
```
