<!--
  Sync Impact Report
  Version change: 0.0.0 → 1.0.0
  Added sections:
    - Principle 1: Accessibilité & Multilinguisme
    - Principle 2: Sécurité & Protection des Données
    - Principle 3: Performance & Légèreté
    - Principle 4: Maintenabilité Laravel
    - Principle 5: Contenu Associatif Fidèle
    - Section: Contraintes Techniques
    - Section: Workflow de Développement
    - Governance
  Templates requiring updates:
    - .specify/templates/plan-template.md ✅ compatible
    - .specify/templates/spec-template.md ✅ compatible
    - .specify/templates/tasks-template.md ✅ compatible
  Follow-up TODOs: none
-->

# ADAP International Constitution

## Core Principles

### I. Accessibilité & Multilinguisme

Le site ADAP International DOIT être accessible au plus grand nombre, en particulier aux communautés africaines et à la diaspora.

- Toute interface utilisateur DOIT être disponible en français et en anglais via le système de localisation Laravel (`lang/fr/`, `lang/en/`)
- Toute nouvelle page ou composant DOIT inclure ses traductions dans les deux langues avant d'être considéré comme terminé
- Le design DOIT être responsive (mobile-first) car une grande partie du public cible accède au site depuis des appareils mobiles
- Les images DOIVENT inclure des attributs `alt` descriptifs pour l'accessibilité

### II. Sécurité & Protection des Données

Les données des utilisateurs et des membres de l'association DOIVENT être protégées rigoureusement.

- L'authentification DOIT utiliser Laravel Sanctum et les mécanismes fournis par Laravel Breeze
- Les formulaires DOIVENT être protégés contre les attaques CSRF via les tokens Laravel
- Les entrées utilisateur (formulaire de contact, inscription) DOIVENT être validées côté serveur avec les Form Requests Laravel
- Les fichiers sensibles (`.env`, credentials) ne DOIVENT JAMAIS être versionnés
- Les requêtes de base de données DOIVENT utiliser Eloquent ORM ou le Query Builder pour prévenir les injections SQL

### III. Performance & Légèreté

Le site DOIT rester performant même sur des connexions à faible débit, fréquentes dans les zones ciblées par l'association.

- Les assets frontend DOIVENT être compilés et minifiés via Vite
- Les images DOIVENT être optimisées avant déploiement
- Le JavaScript DOIT rester minimal : Alpine.js pour l'interactivité, pas de framework lourd côté client
- Les pages DOIVENT se charger en moins de 3 secondes sur une connexion 3G simulée
- Le CSS DOIT utiliser Tailwind CSS avec purge activé pour minimiser la taille du bundle

### IV. Maintenabilité Laravel

Le code DOIT suivre les conventions Laravel pour faciliter la maintenance par l'équipe.

- L'architecture DOIT respecter le pattern MVC de Laravel : Controllers pour la logique HTTP, Models pour les données, Views (Blade) pour le rendu
- Les routes DOIVENT être organisées par domaine : `web.php` pour les pages publiques, `auth.php` pour l'authentification, `api.php` pour les endpoints API
- Les composants Blade réutilisables DOIVENT être placés dans `app/View/Components/`
- Les migrations de base de données DOIVENT être utilisées pour tout changement de schéma
- La configuration DOIT passer par les fichiers `config/` et les variables d'environnement

### V. Contenu Associatif Fidèle

Le contenu du site DOIT refléter fidèlement la mission, la vision et les valeurs d'ADAP International.

- Les 6 domaines d'activités (éducation, assistance médicale, droits humains, culture, tourisme, sport) DOIVENT être représentés de manière équitable
- Le modèle d'entrepreneuriat social DOIT être mis en avant dans la communication
- Les informations sur les partenariats (villes américaines, municipalités camerounaises) DOIVENT être maintenues à jour
- Le ton éditorial DOIT être professionnel, inclusif et orienté vers l'action

## Contraintes Techniques

- **Stack backend** : Laravel 10.x, PHP 8.1+, MySQL
- **Stack frontend** : Blade, Tailwind CSS 3.x, Alpine.js 3.x, Vite 4.x
- **UI Components** : Flowbite pour les composants Tailwind, Swiper pour les carrousels
- **Déploiement** : GitHub Actions avec FTP vers le serveur de production
- **Tests** : PHPUnit 10 pour les tests unitaires et fonctionnels
- **Pas de dépendances lourdes** : éviter l'ajout de packages npm ou Composer non essentiels

## Workflow de Développement

- Chaque fonctionnalité DOIT être développée sur une branche dédiée
- Les modifications DOIVENT être testées localement avant commit
- Les traductions (FR/EN) DOIVENT être ajoutées simultanément avec le code
- Le fichier `.env.example` DOIT être mis à jour si de nouvelles variables d'environnement sont ajoutées
- Les migrations DOIVENT être réversibles (`up` et `down`)

## Governance

Cette constitution est le document de référence pour tout développement sur le projet ADAP International. Elle prime sur les pratiques non documentées.

- **Amendements** : toute modification de cette constitution DOIT être documentée, justifiée et versionnée
- **Versionnement** : format MAJOR.MINOR.PATCH selon les règles sémantiques
- **Conformité** : tout Pull Request ou revue de code DOIT vérifier le respect de ces principes
- **Guide de référence** : consulter `CLAUDE.md` (s'il existe) pour les instructions de développement spécifiques à l'agent

**Version**: 1.0.0 | **Ratified**: 2026-02-19 | **Last Amended**: 2026-02-19
