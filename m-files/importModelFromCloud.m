function model = importModelFromCloud(name, url)
    %   Copyright 2020 The MathWorks, Inc.
    % url = ['http://172.21.73.62/zc/api/get/model/?name=', name];
    apiURL = [url '/api/get/model/?name=', name];
    options = weboptions();
    Body = struct();
    response = webwrite(apiURL, Body, options);
    model = struct('components', '', 'ports', '', 'connections', '', 'portInterfaces', '', 'requirementLinks', '');
    if response.success
        data = response.data;
        model.components = struct2table(data.components);
        model.ports = struct2table(data.ports);
        model.connections = struct2table(data.connections);
        model.portInterfaces = struct2table(data.portInterfaces);
        model.requirementLinks = struct2table(data.requirementLinks);
    end
end