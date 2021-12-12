import sys
import json
from dbAccess import setModel

def main(name, components, ports, connections, portInterfaces, requirementLinks):
    model = setModel(name, components, ports, connections, portInterfaces, requirementLinks)

if __name__ == "__main__":
    main(sys.argv[1], sys.argv[2], sys.argv[3], sys.argv[4], sys.argv[5], sys.argv[6])
