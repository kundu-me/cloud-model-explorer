function downloadArtifactsFromS3(modelName, modelPath)
    system(['aws s3 cp ', 's3://kundu-me-project/system composer_models/artifacts/', modelName, ' ', modelPath, ' --recursive']);
end
