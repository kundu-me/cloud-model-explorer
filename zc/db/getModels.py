import json
from dbAccess import getModels
def main():
    models = getModels()
    print(json.dumps(models))

if __name__ == "__main__":
    main()
