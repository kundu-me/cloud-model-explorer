import sys
import json
from dbAccess import getModel

def main(name, type):
    data = getModel(name, type)
    print(json.dumps(data))

if __name__ == "__main__":
    main(sys.argv[1], sys.argv[2])
