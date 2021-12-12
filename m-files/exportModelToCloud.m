function response = exportModelToCloud(name, url)
    %   Copyright 2020 The MathWorks, Inc.
    % url = 'http://172.21.73.62/zc/api/set/model';
    apiURL = [url '/api/set/model'];
    model = systemcomposer.exportModel(name);
    json_model = jsonencode(model);
    options = weboptions('RequestMethod','post', 'MediaType','application/json');
    Body = struct('name', name, 'data', json_model);
    response = webwrite(apiURL, Body, options);
end