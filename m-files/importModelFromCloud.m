function model = importModelFromCloud(name, url)
    %   Copyright 2020 The MathWorks, Inc.
    % url = ['http://172.21.73.62/zc/api/get/model/?name=', name];
    apiURL = [url '/zc/api/get/model/?name=', name, '&type='];
    options = weboptions();
    Body = struct();

    model = struct('components', '', 'ports', '', 'connections', '', 'portInterfaces', '', 'requirementLinks', '');

    response = webwrite([apiURL, 'components'], Body, options);
    if ~isempty(response)
        model.components = response;
    end

    response = webwrite([apiURL, 'ports'], Body, options);
    if ~isempty(response)
        model.ports = response;
    end

    response = webwrite([apiURL, 'connections'], Body, options);
    if ~isempty(response)
        model.connections = response;
    end

    response = webwrite([apiURL, 'portInterfaces'], Body, options);
    if ~isempty(response)
        model.portInterfaces = response;
    end

    response = webwrite([apiURL, 'requirementLinks'], Body, options);
    if ~isempty(response)
        model.requirementLinks = response;
    end
end
