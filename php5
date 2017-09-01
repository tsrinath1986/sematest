---
- hosts: node
  sudo: yes
  
  tasks:
  - name: install php version 5.5 packages
    apt: name={{ item }} update_cache=yes state=latest
    with_items:
      - mcrypt
      - php5-cli
      - php5-curl
