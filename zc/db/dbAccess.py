import connectionMgr

def getModel(name):
    conn = connectionMgr.getConnection()
    db = conn.systemcomposer_database
    systemcomposer_models = db['systemcomposer_models']

    #Find a document
    query = {'name': name}
    model = systemcomposer_models.find_one(query)
    print(model)
    return model

def getModels():
    conn = connectionMgr.getConnection()
    db = conn.systemcomposer_database
    systemcomposer_models = db['systemcomposer_models']

    #Get all document
    cursor = systemcomposer_models.find({})
    for document in cursor:
          print(document)

def setModel(model):
    conn = connectionMgr.getConnection()
    db = conn.systemcomposer_database
    systemcomposer_models = db['systemcomposer_models']

    #Insert a document
    model = systemcomposer_models.insert_one(model)
