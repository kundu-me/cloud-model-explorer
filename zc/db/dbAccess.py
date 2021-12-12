import time
from connectionMgr import getDB

def getModel(name, type):
    systemcomposer_models = getDB()

    #Find a document
    data = ''
    query = {"name": name}
    cursor = systemcomposer_models.find(query).limit(1)
    for document in cursor:
        data = document[type]
    return data

def getModels():
    systemcomposer_models = getDB()
    #Get all document
    models = []
    cursor = systemcomposer_models.find({})
    for document in cursor:
        name = document['name']
        models.append(name)
    return models

def setModel(name, components, ports, connections, portInterfaces, requirementLinks):
    systemcomposer_models = getDB()

    #Insert a Document
    id = round(time.time() * 1000);
    model = {"_id_": id, "name": name, "components": components, "ports": ports, "connections": connections, "portInterfaces": portInterfaces, "requirementLinks": requirementLinks} 
    systemcomposer_models.insert_one(model)
    return model
