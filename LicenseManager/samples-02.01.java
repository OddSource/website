import net.nicholaswilliams.java.licensing.licensor.*;

public class ApplicationStartupManager
{
    ...
    public void startup()
    {
        ...
        LicenseCreatorProperties.setPrivateKeyDataProvider(new MyPrivateKeyProvider());
        LicenseCreatorProperties.setPrivateKeyPasswordProvider(new MyPrivateKeyPasswordProvider());
        LicenseCreator.getInstance();
    }
    ...
}
