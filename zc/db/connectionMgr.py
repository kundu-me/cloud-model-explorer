import pymongo

#Get Amazon DocumentDB ceredentials from environment variables
username = "nkundu2"
password = "pass1234"
clusterendpoint = "docdb-2021-12-12-05-12-10.cluster-cergpv2ofpiy.us-east-1.docdb.amazonaws.com"


def getConnection():
    #Establish DocumentDB connection
    conn = pymongo.MongoClient(clusterendpoint, username=username, password=password, tls='true', tlsCAFile='../../../db/rds-combined-ca-bundle.pem',retryWrites='false')
    return conn

def getDB():
    conn = getConnection()
    db = conn.systemcomposer_database
    systemcomposer_models = db["systemcomposer_models8"]
    return systemcomposer_models
