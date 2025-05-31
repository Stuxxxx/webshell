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

