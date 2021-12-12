import connetionMgr

def getModel(name)
    conn = connetionMgr.getConnection()
    db = conn.systemcomposer_database
    systemcomposer_models = db['systemcomposer_models']

    #Find a document
    query = {'name': name}
    model = systemcomposer_models.find_one(query)
    return model
