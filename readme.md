# humainhumain.github.io

Site web de [Humain Humain](https://humainhumain.github.io/), généré avec **[Kirigami](https://github.com/HumainHumain/humainhumain.github.io)** et déployé sur GitHub Pages.

## Stack

- **[Kirigami](https://www.npmjs.com/package/@kirigami/kirigami)** — générateur de site statique (voir `kirigami.yaml` pour la configuration)
- **Node.js / npm** — gestion des dépendances (`package.json`, `package-lock.json`)
- **GitHub Actions** — build et déploiement automatiques (`.github/workflows`)
- **GitHub Pages** — hébergement (branche `main`, domaine `humainhumain.github.io`)

## Structure du repo

```
.
├── .github/workflows/   # Workflow(s) CI : build + déploiement sur push
├── .vscode/             # Config d'éditeur partagée
├── assets/              # Images, fichiers statiques (ne pas modifier — voir note ci-dessous)
├── src/
│   └── _data/           # Contenu du site : fichiers .md et .yaml à modifier
├── kirigami.yaml        # Configuration du générateur Kirigami
├── package.json
├── package-lock.json
└── LICENSE              # MIT
```

## Fonctionnement

Le site est entièrement généré à partir du contenu dans `src/_data/` (fichiers `.md` et `.yaml`), selon les paramètres définis dans `kirigami.yaml`.

**Aucune étape manuelle de build n'est requise.** À chaque commit poussé sur `main`, le workflow GitHub Actions dans `.github/workflows` déclenche automatiquement :

1. L'installation des dépendances (`npm install`)
2. La compilation du site avec Kirigami
3. Le déploiement du résultat sur GitHub Pages

## Modifier le site

Pour la grande majorité des changements (textes, contenu des pages) :

1. Modifier les fichiers `.md` et `.yaml` pertinents dans `src/_data/`
2. Commiter et pousser sur `main`
3. Le site se recompile et se redéploie automatiquement — aucune action supplémentaire

> Le dossier `assets/` n'a normalement pas besoin d'être modifié.

## Développement local (optionnel)

Pour prévisualiser les changements avant de les pousser :

```bash
npm install
npx kiri watch
```

Pour rebuilder le site au complet (sans mode watch) :

```bash
npx kiri build
```

## À faire

Voir [`todo.md`](./todo.md) pour la liste des tâches et améliorations en cours.

## Licence

Ce projet est sous licence [MIT](./LICENSE).

---

© Humain Humain, 2026 · Site web par [Maxime Larrivée-Roy](mailto:mlarriveeroy@gmail.com)