-- Table : Joueurs
CREATE TABLE Joueurs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(100),
    age INTEGER,
    position VARCHAR(50),
    niveau INTEGER, -- Niveau global du joueur (0-100)
    progression INTEGER, -- Indicateur de progression (0-100)
    contrat_duree INTEGER, -- Durée du contrat en années
    salaire INTEGER, -- Salaire mensuel en euros
    club_id INTEGER, -- Référence au club auquel appartient le joueur
    est_junior BOOLEAN DEFAULT 0 -- Indique si le joueur est un junior Cdf
);

-- Table : Tactiques
CREATE TABLE Tactiques (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    club_id INTEGER,
    nom VARCHAR(100),
    composition VARCHAR(50),
    consignes TEXT
);

-- Table : Entraînements
CREATE TABLE Entrainements (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    club_id INTEGER,
    type VARCHAR(100),
    description TEXT,
    impact_niveau INTEGER -- Impact de l'entraînement sur le niveau des joueurs (0-100)
);

-- Table : Transferts
CREATE TABLE Transferts (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    joueur_id INTEGER,
    club_vendeur_id INTEGER,
    club_acheteur_id INTEGER,
    type VARCHAR(50), -- Transfert, Prêt, Enchère, Joueur libre
    prix INTEGER,
    date DATE
);

-- Table : Staff
CREATE TABLE Staff (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(100),
    role VARCHAR(100),
    competence INTEGER, -- Niveau de compétence du staff (0-90)
    salaire INTEGER,
    club_id INTEGER
);

-- Table : Evenements
CREATE TABLE Evenements (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titre VARCHAR(100),
    description TEXT,
    date DATE,
    club_id INTEGER
);

-- Table : Presse
CREATE TABLE Presse (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titre VARCHAR(100),
    contenu TEXT,
    date DATE,
    club_id INTEGER
);

-- Table : Sponsors
CREATE TABLE Sponsors (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(100),
    contribution INTEGER, -- Montant apporté par le sponsor
    description TEXT,
    club_id INTEGER
);

-- Table : Clubs
CREATE TABLE Clubs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(100),
    budget INTEGER, -- Budget initial du club
    proprietaire VARCHAR(100)
);
