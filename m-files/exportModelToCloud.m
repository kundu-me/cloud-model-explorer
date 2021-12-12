function response = exportModelToCloud(name, url)
    %   Copyright 2020 The MathWorks, Inc.
    % url = 'http://172.21.73.62/zc/api/set/model';
    apiURL = [url '/zc/api/set/model'];
    model = systemcomposer.exportModel(name);
    components = jsonencode(model.components);
    ports = jsonencode(model.ports);
    connections = jsonencode(jsonencode(model.connections));
    portInterfaces = jsonencode(model.portInterfaces);
    requirementLinks = jsonencode(model.requirementLinks);
    options = weboptions('RequestMethod','post', 'MediaType','application/json');
    Body = struct('name', name, 'components', components, 'ports', ports, 'connections', connections, 'portInterfaces', portInterfaces, 'requirementLinks', requirementLinks);
    response = webwrite(apiURL, Body, options);
end
