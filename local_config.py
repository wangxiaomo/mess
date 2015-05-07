# coding: utf8

import pickle


def get_db():
    return pickle.load(open(".db"))

def save_db(db):
    pickle.dump(db, open(".db", "wb"))

def db_set(key, value):
    db = get_db()
    db[key] = value
    save_db(db)
    return value

def db_get(key, default=None):
    db = get_db()
    return db.get(key, default)


if __name__ == '__main__':
    db = {
        'Webcam': 13,
    }
    save_db(db)
